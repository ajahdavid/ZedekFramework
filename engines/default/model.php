<?php
namespace __zf__;
use \PDO as PDO;
class CModel extends ZModel{
	function _default(){
		print $this->template('index')->render();
	}
}