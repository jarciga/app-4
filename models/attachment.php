<?php
require_once '../connections/connection.php';

class Attachment
{
	  public static function delete($id)
    {
        global $employeedb;
        $result = $employeedb->query('delete from attachments where id=' . $id);
        return $result;
        $result->close();
    }
}
	?>