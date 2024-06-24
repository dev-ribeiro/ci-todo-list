<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home | Todo List</title>
	<link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css') ?>">
	<script src="<?php echo base_url('bootstrap/js/bootstrap.min.js') ?>" defer></script>
</head>

<body>
	<header class="p-3 d-flex justify-content-center align-items-center bg-primary-subtle">
		<h1 class="fs-4 text-dark">Bem vindo a aplicação de lista de tarefas</h1>
	</header>
	<main>
		<section>
			<?php echo form_open('task/insert'); ?>
			<div class="my-3 container-sm d-flex justify-content-center align-items-center gap-3">
				<textarea name="task_description" class="p-2" style="resize: none; height: 125px; flex: 1; max-width: 500px;" maxlength="200" placeholder="Até 200 caracteres" required></textarea>
				<button type="submit" class="btn btn-success">
					<span class="fs-5">Criar tarefa</span>
				</button>
			</div>
			</form>
		</section>
		<section>
			<div class="mb-3 container-sm" style="border: 1px solid black; border-radius: 6px;">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>Id</th>
							<th>Data criação</th>
							<th>Tarefa</th>
							<th>Finalizado</th>
							<th>Ações</th>
						</tr>
					</thead>
					<tbody>
						<?php if ($isEmpty == TRUE) : ?>
							<tr>
								<td colspan="5">
									<span class="fs-6">Não há dados cadastrados</span>
								</td>
							</tr>
						<?php endif; ?>

						<?php if ($isEmpty == FALSE) : ?>
							<?php foreach ($data as $item) : ?>
								<tr>
									<td> <?php echo $item->task_id ?> </td>
									<td> <?php echo $item->task_date ?> </td>
									<td>
										<div style="max-width: 300px; overflow: hidden;">
											<span>
												<?php echo $item->task_description ?>
											</span>
										</div>
									</td>
									<td> <?php echo $item->task_is_finished == TRUE ? "✅" : "❌" ?> </td>
									<td>
										<div class="d-flex">
											<button>Editar</button>
											<button>Finalizar</button>
											<button>Deletar</button>
										</div>
									</td>
								</tr>
							<?php endforeach; ?>
						<?php endif; ?>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="5">
								<span>Foram encontrados <?php echo $numberOfElements ?> registro(s)</span>
							</td>
						</tr>
					</tfoot>
				</table>
			</div>
		</section>
	</main>
	<footer></footer>
</body>

</html>
