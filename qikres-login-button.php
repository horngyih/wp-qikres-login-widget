<?php
/*
	Plugin Name:	Qikres Login Button
*/
	class Qikres_Login_Button{
		const wid = 'qikres_login_button';

		public static function init(){
		}

		public static function widget(){
			require_once( 'qikres-widget.php' );
		}
	}
?>
