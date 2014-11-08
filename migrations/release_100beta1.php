<?php

namespace paul999\ajaxshoutbox\migrations;

use phpbb\db\migration\migration;

class release_100beta1 extends migration
{
	static public function depends_on()
	{
		return array(
			'\paul999\ajaxshoutbox\migrations\create_table',
			'\paul999\ajaxshoutbox\migrations\add_permissions',
		);
	}

	public function update_data()
	{
		return array(
			array('config.add', array('profile_guestbook_version', '1.0.0-BETA1'))
		);
	}
}