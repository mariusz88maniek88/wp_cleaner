<?php
/**
 * @package cleanerDB
 */
namespace cleanerdb\view;

use cleanerdb\db\DeleteDB;

class View extends DeleteDB{

	public function buildAdminHtml() {
	    parent::issetDelete();
	?>

		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
					<?php (isset($alert)) ? $alert : '' ?>
					<h1 class="m-3">Ustawienia Cleaner Db - Atelier</h1>
					<h5 class="m-2">Usuń Historię zapisu Settings Customize</h5>
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary m-4" data-toggle="modal" data-target="#exampleModal">
						Wyczyść
					</button>
					<h4 class="m-2">Ilość zapisanych rekrodów historii w bazie: <?php echo parent::customizeChange(); ?></h4>

					<!-- Modal -->
					<div class="modal fade m-5" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<form method="post" action="">
									<div class="form-group text-center">
										<h4 class="m-4">Czy napewno chcesz usunąć Historię..?</h4>
										<p class="text-center">
											<input type="submit" class="btn btn-success btn-lg mr-5" name="page=tak" value="Tak" placeholder="Tak">
											<input type="submit" class="btn btn-danger btn-lg ml-5" name="page=nie" value="Nie" placeholder="Nie">
										</p>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	<?php
	}
}