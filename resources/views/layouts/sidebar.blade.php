<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class=" nav flex-column">
            <li class="nav-item">
                <a class="nav-link mb-2 {{ Request::is('home*') ? 'active' : '' }}" href="/home">
                    <span data-feather="file-text"></span>
                    Dashboard
                </a>
            </li>
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mb-1 text-muted">
                <span>Master</span>
            </h6>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('suppliers*') ? 'active' : '' }}" href="/suppliers">
                    <span data-feather="file-text"></span>
                    Supplier
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('customers*', 'shiptoaddresses') ? 'active' : '' }}"
                    href="/customers">
                    <span data-feather="file-text"></span>
                    Customer / Address
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('mastercards*', 'groupmastercards*') ? 'active' : '' }}"
                    href="/mastercards">
                    <span data-feather="file-text"></span>
                    Master Card / Group
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('drivers*') ? 'active' : '' }}" href="/drivers">
                    <span data-feather="file-text"></span>
                    Driver
                </a>
            </li>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3 mb-1 text-muted">
                <span>Order</span>
            </h6>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('purchaseorders*') ? 'active' : '' }}" href="/purchaseorders">
                    <span data-feather="file-text"></span>
                    Purchase Order & Request
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('rekapsuppliers*') ? 'active' : '' }}" href="/rekapsuppliers">
                    <span data-feather="file-text"></span>
                    Status Delivery Supplier
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('rekaporders*') ? 'active' : '' }}" href="/rekaporders">
                    <span data-feather="file-text"></span>
                    Data Good Receive
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('rawmaterials*') ? 'active' : '' }}" href="/rawmaterials">
                    <span data-feather="file-text"></span>
                    Slip Raw Material
                </a>
            </li>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3 mb-1 text-muted">
                <span>Production</span>
            </h6>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('salesorders*') ? 'active' : '' }}" href="/salesorders">
                    <span data-feather="file-text"></span>
                    Status Order
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('manufacturingorders*') ? 'active' : '' }}"
                    href="/manufacturingorders">
                    <span data-feather="file-text"></span>
                    Manufacturing Order
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('slipfinishgoods*') ? 'active' : '' }}" href="/slipfinishgoods">
                    <span data-feather="file-text"></span>
                    Slip Finish Good
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('inquiryproducts*') ? 'active' : '' }}" href="/inquiryproducts">
                    <span data-feather="file-text"></span>
                    Inquiry Product
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('deliveries*') ? 'active' : '' }}" href="/deliveries">
                    <span data-feather="file-text"></span>
                    Status Delivery
                </a>
            </li>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3 mb-1 text-muted">
                <span>Invoice</span>
            </h6>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('invoicepos*') ? 'active' : '' }}" href="/invoicepos">
                    <span data-feather="file-text"></span>
                    Invoice Purchase Order
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('invoiceprs*') ? 'active' : '' }}" href="/invoiceprs">
                    <span data-feather="file-text"></span>
                    Invoice Purchase Request
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('invoiceraws*') ? 'active' : '' }}" href="/invoiceraws">
                    <span data-feather="file-text"></span>
                    Invoice Raw Material
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('invoiceslips*') ? 'active' : '' }}" href="/invoiceslips">
                    <span data-feather="file-text"></span>
                    Invoice Finish Good
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('invoicedeliveries*') ? 'active' : '' }}" href="/invoicedeliveries">
                    <span data-feather="file-text"></span>
                    Invoice Delivery
                </a>
            </li>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3 mb-1 text-muted">
                <span>Laporan</span>
            </h6>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('reportpos*') ? 'active' : '' }}" href="/reportpos">
                    <span data-feather="file-text"></span>
                    Laporan PO & PR
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('reportsos*') ? 'active' : '' }}" href="/reportsos">
                    <span data-feather="file-text"></span>
                    Laporan Sales Order
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('reportdeliveries*') ? 'active' : '' }}" href="/reportdeliveries">
                    <span data-feather="file-text"></span>
                    Laporan Delivery
                </a>
            </li>
        </ul>

        @can('owner')
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3 mb-1 text-muted">
                <span>Owner</span>
            </h6>
            <ul class="nav flex-column mb-3">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('users*') ? 'active' : '' }}" href="/users">
                        <span data-feather="grid"></span>
                        Management User
                    </a>
                </li>
            </ul>
        @endcan

    </div>
</nav>
