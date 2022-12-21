@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail Inquiry Product</h1>
    </div>

    <table border="1" class="table table-bordered">
        <tbody>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>No Manufacturing</h6>
                </td>
                <td>
                    <h6>{{ $inquiryproduct->slipfinishgood->manufacturingorder->no_mo }} -
                        {{ $inquiryproduct->slipfinishgood->manufacturingorder->no_urut }}</h6>
                </td>
            </tr>
    </table>

    <table border="1" class="table table-bordered">
        <thead>
            <tr>
                <th>
                    <h5>Slitter</h5>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Product</h6>
                </td>
                <td>
                    <h6>{{ number_format($inquiryproduct->slitter_product, 0, '.', ',') }}</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Reject</h6>
                </td>
                <td>
                    <h6>{{ number_format($inquiryproduct->slitter_reject, 0, '.', ',') }}</h6>
                </td>
            </tr>
        </tbody>
    </table>

    <table border="1" class="table table-bordered">
        <thead>
            <tr>
                <th>
                    <h5>Printing</h5>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Product</h6>
                </td>
                <td>
                    <h6>{{ number_format($inquiryproduct->printing_product, 0, '.', ',') }}</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Reject</h6>
                </td>
                <td>
                    <h6>{{ number_format($inquiryproduct->printing_reject, 0, '.', ',') }}</h6>
                </td>
            </tr>
        </tbody>
    </table>

    <table border="1" class="table table-bordered">
        <thead>
            <tr>
                <th>
                    <h5>Slotter</h5>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Product</h6>
                </td>
                <td>
                    <h6>{{ number_format($inquiryproduct->slotter_product, 0, '.', ',') }}</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Reject</h6>
                </td>
                <td>
                    <h6>{{ number_format($inquiryproduct->slotter_reject, 0, '.', ',') }}</h6>
                </td>
            </tr>
        </tbody>
    </table>

    <table border="1" class="table table-bordered">
        <thead>
            <tr>
                <th>
                    <h5>Glue / Stitching</h5>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Product</h6>
                </td>
                <td>
                    <h6>{{ number_format($inquiryproduct->glue_product, 0, '.', ',') }}</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Reject</h6>
                </td>
                <td>
                    <h6>{{ number_format($inquiryproduct->glue_reject, 0, '.', ',') }}</h6>
                </td>
            </tr>
        </tbody>
    </table>

    <table border="1" class="table table-bordered">
        <thead>
            <tr>
                <th>
                    <h5>Pond</h5>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Product</h6>
                </td>
                <td>
                    <h6>{{ number_format($inquiryproduct->pond_product, 0, '.', ',') }}</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Reject</h6>
                </td>
                <td>
                    <h6>{{ number_format($inquiryproduct->pond_reject, 0, '.', ',') }}</h6>
                </td>
            </tr>
        </tbody>
    </table>

    <table border="1" class="table table-bordered">
        <thead>
            <tr>
                <th>
                    <h5>Total</h5>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="col-lg-2 col-6">
                    <h6>Qty Finish</h6>
                </td>
                <td>
                    <h6>{{ number_format($inquiryproduct->qty_finish, 0, '.', ',') }}</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Waste Product</h6>
                </td>
                <td>
                    <h6>{{ number_format($inquiryproduct->waste_product, 0, '.', ',') }}</h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Qty Total Product</h6>
                </td>
                <td>
                    <h6>{{ number_format($inquiryproduct->qty_product, 0, '.', ',') }}</h6>
                </td>
            </tr>
        </tbody>
    </table>

    <a href="/inquiryproducts" class="btn btn-secondary col-lg-3 mb-4">Back</a>
@endsection
