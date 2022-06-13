<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Live extends MY_Controller
{

	public function index()
	{

		$head = $this->getDataRow('head', '*', array('status' => 1))[0];
		$ads = $this->getDataRow('ads', '*', array('status' => 1));
		$group = $this->getDataRow('game_group', '*', '', '', 'game_group.pkey ASC');
		$game = $this->getDataRow('game', '*', array('groupkey' => $group[0]['pkey']));
		$content = $this->getDataRow('content', '*', array('status' => 1))[0];
		$company = $this->getDataRow('profile_company', '*')[0];
		foreach ($game as $gameKey => $gameValue) {
			$game[$gameKey]['color'] = $this->colorClass($gameValue['percentage']);
		}
		$data['html']['company'] = $company;
		$data['html']['content'] = $content;
		$data['html']['game'] = $game;
		$data['html']['group'] = $group;
		$data['html']['ads'] = $ads;
		$data['html']['head'] = $head;
		$data['html']['title'] = 'List Game';
		$data['url'] = 'public/body';
		$this->templatePublic($data);
	}
	public function colorClass($data = '')
	{

		switch ($data) {
			case $data <= 30:
				return 'bg-danger';
				break;
			case $data <= 50 && $data > 30:
				return 'bg-warning';
				break;
			case $data <= 80 && $data > 50:
				return 'bg-info';
				break;
			case $data <= 99 && $data > 80:
				return 'bg-success';
				break;
			default:
				return 'bg-primary';
				break;
		}
	}
	public function ajax()
	{
		$game = $this->getDataRow('game', '*', array('groupkey' => $_POST['grubid']));
		foreach ($game as $gameKey => $gameValue) {
			$game[$gameKey]['color'] = $this->colorClass($gameValue['percentage']);
		}
		echo json_encode($game);
	}
}
