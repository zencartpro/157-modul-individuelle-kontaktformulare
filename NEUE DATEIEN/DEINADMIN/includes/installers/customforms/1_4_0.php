<?php
$db->Execute("UPDATE " . TABLE_CONFIGURATION . " SET configuration_value = '1.4.0' WHERE configuration_key = 'CUSTOM_FORMS_VERSION' LIMIT 1;");