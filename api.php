<?php

	class Messages {
		public static function get ()
		{
			$messages = file_get_contents( 'messages.json' );
			return $messages;
		}

		public static function create ()
		{

		}

		public static function delete ( $id )
		{

		}
	}