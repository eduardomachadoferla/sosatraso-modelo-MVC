<div class="cont flex img mb-7">
    <img src="<?php echo BASE_URL; ?>imagens/logo-escolas-sociais.png" class="ml-3" width="250" style="margin-top:20px; position: relative; left: 20px;" class="img">

    <div class="textos txt w-sm">
        <span style="color:black;">SOS</span> 
        <span style="color:white;">ATRASO</span> 
    </div>

    <ul class="menu x-xl invisible md:visible">
        <li>
            <a href="<?php echo BASE_ADMIN; ?>total_turmas.php" class="bg-marista2 text-white px-6 py-2 rounded-lg drop-shadow-lg mt-6">
                Total por Turmas
            </a>
        </li>

        <li>
            <a href="<?php echo BASE_ADMIN; ?>relatorio.php" class="bg-marista2 text-white px-6 py-2 rounded-lg drop-shadow-lg mt-6">
                Relatório Alunos
            </a>
        </li>

        <?php if ($_SESSION['login']['permissao'] === 'admin'): ?>
            <li>
                <a href="<?php echo BASE_ADMIN; ?>alunos/alunos.php" class="bg-marista2 text-white px-6 py-2 rounded-lg drop-shadow-lg mt-6">
                    Alunos
                </a>
            </li>
            <li>
                <a href="<?php echo BASE_ADMIN; ?>usuarios/listar-usuarios.php" class="bg-marista2 text-white px-2 py-2 rounded-lg drop-shadow-lg mt-6">
                    usuários
                </a>
            </li>
        <?php endif; ?>

        <li>
            <a href="<?php echo BASE_ADMIN; ?>logoff.php" class="bg-marista2 text-white px-6 py-2 rounded-lg drop-shadow-lg mt-6">
                Logoff
            </a>
        </li>
    </ul>

    <div class="visible md:invisible"> *** </div>
</div>
