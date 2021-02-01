<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <nav class="pcoded-navbar">
            <div class="pcoded-inner-navbar main-menu">
                <div class="pcoded-navigatio-lavel">Navigation</div>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="<?= menu(1,["dashboard"])[0]; ?>">
                        <a href="<?= base_url('dashboard') ?>">
                            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                            <span class="pcoded-mtext">Dashboard</span>
                        </a>
                    </li>
                </ul>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="<?= menu(1,["clients"])[0]; ?>">
                        <a href="<?= base_url('clients') ?>">
                            <span class="pcoded-micon"><i class="fa fa-code"></i></span>
                            <span class="pcoded-mtext">Clients</span>
                        </a>
                    </li>
                </ul>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="pcoded-hasmenu <?= menu(1,["deposit"])[2]; ?>">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="fa fa-sort"></i></span>
                            <span class="pcoded-mtext">Deposit</span>
                        </a>   
                        <ul class="pcoded-submenu">
                            <li class="<?= menu(2,["new"])[0]; ?>">
                                <a href="<?= base_url('deposit/new') ?>">
                                    <span class="pcoded-micon"><i class="fa fa-list"></i></span>
                                    <span class="pcoded-mtext">New</span>
                                </a>
                            </li>
                            <li class="<?= menu(2,["approved"])[0]; ?>">
                                <a href="<?= base_url('deposit/approved') ?>">
                                    <span class="pcoded-micon"><i class="fa fa-list"></i></span>
                                    <span class="pcoded-mtext">Approved</span>
                                </a>
                            </li>
                            <li class="<?= menu(2,["rejected"])[0]; ?>">
                                <a href="<?= base_url('deposit/rejected') ?>">
                                    <span class="pcoded-micon"><i class="fa fa-list"></i></span>
                                    <span class="pcoded-mtext">Rejected</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="pcoded-hasmenu <?= menu(1,["withdraw"])[2]; ?>">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="fa fa-chevron-circle-down"></i></span>
                            <span class="pcoded-mtext">Withdraw</span>
                        </a>   
                        <ul class="pcoded-submenu">
                            <li class="<?= menu(2,["new"])[0]; ?>">
                                <a href="<?= base_url('withdraw/new') ?>">
                                    <span class="pcoded-micon"><i class="fa fa-list"></i></span>
                                    <span class="pcoded-mtext">New</span>
                                </a>
                            </li>
                            <li class="<?= menu(2,["approved"])[0]; ?>">
                                <a href="<?= base_url('withdraw/approved') ?>">
                                    <span class="pcoded-micon"><i class="fa fa-list"></i></span>
                                    <span class="pcoded-mtext">Approved</span>
                                </a>
                            </li>
                            <li class="<?= menu(2,["rejected"])[0]; ?>">
                                <a href="<?= base_url('withdraw/rejected') ?>">
                                    <span class="pcoded-micon"><i class="fa fa-list"></i></span>
                                    <span class="pcoded-mtext">Rejected</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="pcoded-hasmenu <?= menu(1,["invoice_pay"])[2]; ?>">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="fa fa-file"></i></span>
                            <span class="pcoded-mtext">Invoice Payments</span>
                        </a>   
                        <ul class="pcoded-submenu">
                            <li class="<?= menu(2,["new"])[0]; ?>">
                                <a href="<?= base_url('invoice_pay/new') ?>">
                                    <span class="pcoded-micon"><i class="fa fa-list"></i></span>
                                    <span class="pcoded-mtext">New</span>
                                </a>
                            </li>
                            <li class="<?= menu(2,["approved"])[0]; ?>">
                                <a href="<?= base_url('invoice_pay/approved') ?>">
                                    <span class="pcoded-micon"><i class="fa fa-list"></i></span>
                                    <span class="pcoded-mtext">Approved</span>
                                </a>
                            </li>
                            <li class="<?= menu(2,["rejected"])[0]; ?>">
                                <a href="<?= base_url('invoice_pay/rejected') ?>">
                                    <span class="pcoded-micon"><i class="fa fa-list"></i></span>
                                    <span class="pcoded-mtext">Rejected</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="pcoded-hasmenu <?= menu(1,["cards"])[2]; ?>">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="fa fa-credit-card"></i></span>
                            <span class="pcoded-mtext">Cards</span>
                        </a>   
                        <ul class="pcoded-submenu">
                            <li class="<?= menu(2,["new"])[0]; ?>">
                                <a href="<?= base_url('cards/new') ?>">
                                    <span class="pcoded-micon"><i class="fa fa-list"></i></span>
                                    <span class="pcoded-mtext">New Requests</span>
                                </a>
                            </li>
                            <li class="<?= menu(2,["approved"])[0]; ?>">
                                <a href="<?= base_url('cards/approved') ?>">
                                    <span class="pcoded-micon"><i class="fa fa-list"></i></span>
                                    <span class="pcoded-mtext">Approved Requests</span>
                                </a>
                            </li>
                            <li class="<?= menu(2,["pricing"])[0]; ?>">
                                <a href="<?= base_url('cards/pricing') ?>">
                                    <span class="pcoded-micon"><i class="fa fa-list"></i></span>
                                    <span class="pcoded-mtext">Pricing</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="pcoded-hasmenu <?= menu(1,["modification_req"])[2]; ?>">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="fa fa-refresh"></i></span>
                            <span class="pcoded-mtext">Modification Request</span>
                        </a>   
                        <ul class="pcoded-submenu">
                            <li class="<?= menu(2,["active"])[0]; ?>">
                                <a href="<?= base_url('modification_req/active') ?>">
                                    <span class="pcoded-micon"><i class="fa fa-list"></i></span>
                                    <span class="pcoded-mtext">Active</span>
                                </a>
                            </li>
                            <li class="<?= menu(2,["old"])[0]; ?>">
                                <a href="<?= base_url('modification_req/old') ?>">
                                    <span class="pcoded-micon"><i class="fa fa-list"></i></span>
                                    <span class="pcoded-mtext">Old</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="pcoded-hasmenu <?= menu(1,["twilio"])[2]; ?>">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="fa fa-comment"></i></span>
                            <span class="pcoded-mtext">Twilio</span>
                        </a>   
                        <ul class="pcoded-submenu">
                            <li class="<?= menu(2,["active"])[0]; ?>">
                                <a href="<?= base_url('twilio/active') ?>">
                                    <span class="pcoded-micon"><i class="fa fa-list"></i></span>
                                    <span class="pcoded-mtext">Active</span>
                                </a>
                            </li>
                            <li class="<?= menu(2,["old"])[0]; ?>">
                                <a href="<?= base_url('twilio/old') ?>">
                                    <span class="pcoded-micon"><i class="fa fa-list"></i></span>
                                    <span class="pcoded-mtext">Old</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="<?= menu(1,["withdraw_method"])[0]; ?>">
                        <a href="<?= base_url('withdraw_method') ?>">
                            <span class="pcoded-micon"><i class="fa fa-money"></i></span>
                            <span class="pcoded-mtext">Withdraw methods</span>
                        </a>
                    </li>
                </ul>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="<?= menu(1,["setting"])[0]; ?>">
                        <a href="<?= base_url('setting') ?>">
                            <span class="pcoded-micon"><i class="fa fa-gear fa-spin"></i></span>
                            <span class="pcoded-mtext">Setting</span>
                        </a>
                    </li>
                </ul>
                <ul class="pcoded-item pcoded-left-item">
                    <li>
                        <a href="<?= base_url('login/logout') ?>">
                            <span class="pcoded-micon"><i class="feather icon-log-out"></i></span>
                            <span class="pcoded-mtext">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">