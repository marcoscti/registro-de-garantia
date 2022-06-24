<div class="be-left-sidebar">
    <div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle">Menu</a>
        <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
                <div class="left-sidebar-content">
                    <ul class="sidebar-elements">
                        </li>
                        <!-- <li>
                            <a href="admin"><i class="icon mdi mdi-home"></i><span>Dashboard (admin)</span></a></li> -->
                        <li class="divider">Gestão de informações</a>
                        <li class="parent"><a href=""><i class="icon mdi mdi-folder-star"></i><span>Registros de garantia</span></a>
                            <ul class="sub-menu">
                                <li><a href="garantia"><i class="icon mdi mdi-folder-star"></i> Novo</a></li>
                                <li><a href="listar"> <i class="icon mdi mdi-folder-star"></i> Listar</a></li>
                            </ul>
                        </li>
                        <?php if ($_SESSION['logado']['usu_nivel_id'] == 1) : ?>
                            <li class="parent"><a href="novo"><i class="icon mdi mdi-accounts"></i><span>Gerenciar usuários</span></a>
                                <ul class="sub-menu">
                                    <li><a href="novo-usuario">Novo</a></li>
                                    <li><a href="list-all-users">Listar</a></li>
                                </ul>
                            </li>
                        <?php endif; ?>
                        <li><a href="profile"><i class="icon mdi mdi-settings"></i><span>Meus dados</span></a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>