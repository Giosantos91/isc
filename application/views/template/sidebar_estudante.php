<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <?php
        $id_role = $this->session->userdata('id_role');
        $queryMenu = "SELECT `menu`.`id_menu`, `menu`
                            FROM `menu` JOIN `access_menu`
                              ON `menu`.`id_menu` = `access_menu`.`id_menu`
                           WHERE `access_menu`.`id_role` = $id_role
                        ORDER BY `access_menu`.`id_menu` ASC
                        ";
        $menu = $this->db->query($queryMenu)->result_array();

        ?>
            <ul>
                <?php foreach ($menu as $m) : ?>

                <li class="menu-title"><span><?= $m['menu']; ?></span></li>
                <li class="treeview">

                    <?php
                        $menuId = $m['id_menu'];
                        $querySubMenu = "SELECT *
                                FROM `sub_menu` JOIN `menu` 
                                    ON `sub_menu`.`id_menu` = `menu`.`id_menu`
                                WHERE `sub_menu`.`id_menu` = $menuId
                                    AND `sub_menu`.`aktif` = 1
                                    ORDER BY `sub_menu`.`id_sub_menu` ASC
                            ";
                        $subMenu = $this->db->query($querySubMenu)->result_array();
                        ?>
                    <?php foreach ($subMenu as $sm) : ?>
                    <?php if ($titlu == $sm['titlu']) : ?>
                     <li class="nav-item active">
                    <?php else : ?>
                       <li class="nav-item">
                    <?php endif; ?>
                    <a class="nav-link pb-0" href="<?= base_url($sm['url']); ?>">
                        <i class="<?= $sm['icon']; ?>"></i>
                        <span><?= $sm['titlu']; ?></span></a>
                </li>
                        <?php endforeach; ?>
                        <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>