<?php
class Controller_ViewSample extends Controller
{
 public function action_index()
 {
	$data = array();
	$data['title'] = 'ビューのサンプル';
	$data['username'] = 'Ritsu';
	
	// View オブジェクトを生成して返す
	return View::forge('viewsample', $data);	
 }
}