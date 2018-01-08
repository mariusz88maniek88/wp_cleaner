<?php
/**
 * @package cleanerDB
 */
namespace cleanerdb\db;

class DeleteDB {

	public function customizeChange() {
		global $wpdb;

		$query = 'SELECT * FROM ' . $wpdb->prefix . 'posts WHERE post_type=\'customize_changeset\'';

		$customs = $wpdb->query( $query );

		return $customs;

	}

	public function deleteHistory() {

		global $wpdb;
		$query = $wpdb->query('DELETE FROM ' . $wpdb->prefix . 'posts WHERE post_type=\'customize_changeset\'');

		$delete = $wpdb->query($query);
		return $delete;

	}

	public function issetDelete() {

		if(isset($_POST['page=tak'])) {

			$this->deleteHistory();
			$alert = '<div class="mt-3 mb-2 alert alert-success" role="alert">
  					<p class="mb-2">Pomyślnie usunięto Historię zapisu ustawień Customize.</p>
					</div>';
			echo $alert;

		} else {
			echo '';
		}

	}

}



