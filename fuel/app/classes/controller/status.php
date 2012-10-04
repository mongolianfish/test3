<?php
class Controller_Status extends Controller
{
	public function action_index()
	{
		// Status モデルから結果を取得する
		$results = Model_Status::find_body_by_username('foo');
		// $results をダンプして確認する
		Debug::dump($results);
		return ''; // 返り値がないとエラーになるため
	}
}