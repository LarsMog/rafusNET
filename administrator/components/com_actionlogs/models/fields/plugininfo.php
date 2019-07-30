<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_actionlogs
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_BASE') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Router\Route;

/**
 * Information field.
 *
 * @since  3.9.2
 */
class JFormFieldPluginInfo extends JFormField
{
	/**
	 * The form field type.
	 *
	 * @var    string
	 * @since  3.9.2
	 */
	protected $type = 'PluginInfo';

	/**
	 * Method to get the field input markup.
	 *
	 * @return  string	The field input markup.
	 *
	 * @since   3.9.2
	 */
	protected function getInput()
	{
		$db = Factory::getDbo();
		$result = null;
		$query = $db->getQuery(true)
			->select($db->quoteName('extension_id'))
			->from($db->quoteName('#__extensions'))
			->where($db->quoteName('folder') . ' = ' . $db->quote('actionlog'))
			->where($db->quoteName('element') . ' = ' . $db->quote('joomla'));
		$db->setQuery($query);

		try
		{
			$result = (int) $db->loadResult();
		}
		catch (RuntimeException $e)
		{
			JError::raiseWarning(500, $e->getMessage());
		}

		$link = HTMLHelper::_(
			'link',
			Route::_('index.php?option=com_plugins&task=plugin.edit&extension_id=' . $result),
			Text::_('PLG_SYSTEM_ACTIONLOGS_JOOMLA_ACTIONLOG_DISABLED'),
			array('class' => 'alert-link')
		);

		return '<div class="alert alert-info">'
			. '<span class="fa fa-info-circle" aria-hidden="true"></span><span class="sr-only">'
			. Text::_('INFO')
			. '</span>'
			. Text::sprintf('PLG_SYSTEM_ACTIONLOGS_JOOMLA_ACTIONLOG_DISABLED_REDIRECT', $link)
			. '</div>';
	}
}
