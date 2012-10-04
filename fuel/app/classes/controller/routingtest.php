<?php
class Controller_RoutingTest extends Controller {
	public function router() {
// ルート情報を表示
		Debug::dump($this->request->route);
// 名前付きパラメータの一覧を表示
		Debug::dump($this->params());
		return '';
	}
}