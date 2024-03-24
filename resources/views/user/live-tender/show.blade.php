@extends('layouts.frontend.master')

@section('content')
    <div class="live-tender-wrapper">
        <h1 class="tender-title">{{ $tender->name }}</h1>
        <div class="live-table-wrapper mt-3">
            <h2 class="table-text-list">Details Information</h2>
            <div class="table-responsive">
                <table class="table table-hover">
                    <tbody class="tender-table-body">
                        <tr>
                            <td>Tender No.</td>
                            <td class="bg-white">{{ $tender->tender_id }}</td>
                            <td>Tender Title</td>
                            <td class="bg-white">{{ $tender->name }}</td>

                        </tr>
                        <tr>
                            <td>Potential government value</td>
                            <td class="bg-white">{{ $tender->govment_price }}</td>
                            <td>Schedule price</td>
                            <td class="bg-white">{{ $tender->shedeul_price }}</td>

                        </tr>
                        <tr>
                            <td>Opening Date</td>
                            <td class="bg-white">{{ $tender->start_date }}</td>
                            <td>Last Submission Date</td>
                            <td class="bg-white">{{ $tender->end_date }}</td>

                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="tender-information mt-3">
                <h2 class="table-text-list">
                    Tender Description
                </h2>
                <div class="tender-information-content">
                    {{ $tender->description }}
                </div>
            </div>
            <div class="tender-information mt-3">
                <h2 class="table-text-list">Contact Details</h2>
                <div class="tender-content-contact">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="tender-contact-item">
                                {{ $tender->contact_details }}
                            </div>
                        </div>
                        {{-- <div class="col-md-6 mb-4">
                            <div class="tender-contact-item">
                                <h4>Procurement Office Information</h4>
                                <p>Name : [00193318]-MD. NAJMUR SHAKIR</p>

                                <p>
                                    Email : <span>
                                        <a href="tel:" rel="noopener noreferrer"> najmur.shakir@brac.net</a></span>
                                </p>
                                <p>Phone : 880-2-9881265</p>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="tender-information mt-3 mb-3">
                <h2 class="table-text-list">
                    Tender Condition
                </h2>
                <div class="tender-information-content">
                    {{ $tender->description }}
                </div>
            </div>
            <a href="{{ route('user.participate-tender', $tender->id) }}" class="tender-appy-btn custom-btn mt-3">
                Apply Online
            </a>
        </div>
    </div>
@endsection
{{-- @section('content')
    <div class="live-tender-wrapper">
        <h1 class="tender-title">Live Tender List</h1>
        <div class="live-table-wrapper mt-3">
            <h2 class="table-text-list">Details Information</h2>
            <div class="table-responsive">
                <table class="table table-hover">
                    <tbody class="tender-table-body">
                        <tr>
                            <td>Tender No.</td>
                            <td class="bg-white">{{ $tender->tender_id }}</td>
                            <td>Tender Title</td>
                            <td class="bg-white">{{ $tender->name }}</td>
                            <td>Tender Status</td>
                            <td class="bg-white">{{ $tender->status == 1 ? 'Published' : ($tender->status == 2 ? 'Pending' : 'Unknown') }}</td>
                        </tr>
                        <tr>
                            <td>Opening Date</td>
                            <td class="bg-white">{{ $tender->start_date }}</td>
                            <td>Last Submission Date</td>
                            <td class="bg-white">{{ $tender->end_date }}</td>

                        </tr>

                        <tr>
                            <td>Tender Document Fee</td>
                            <td class="bg-white">0.00 BDT</td>
                            <td>Tender Security Amount</td>
                            <td class="bg-white">0.00 BDT</td>
                        </tr>
                        <tr>
                            <td>Tender Opening Place</td>
                            <td class="bg-white">Online</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tender-item-details-wrapper mt-3">
                <h2 class="table-text-list">Tender Item Details</h2>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="tender-table-header">
                            <tr>
                                <th scope="col">Sl.</th>
                                <th scope="col">Lot No/Group</th>
                                <th scope="col">Item Name</th>
                                <th scope="col">UoM</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Show Delivery Schedule</th>
                            </tr>
                        </thead>
                        <tbody class="tender-table-body">
                            <tr>
                                <td>01</td>
                                <td>Lot-1</td>
                                <td>RFQ for the supply of Brick and Bricks Chips</td>

                                <td>15/03/2024</td>
                                <td>15</td>
                                <td>Published</td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>Lot-1</td>
                                <td>RFQ for the supply of Brick and Bricks Chips</td>

                                <td>15/03/2024</td>
                                <td>15</td>
                                <td>Published</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tender-information mt-3">
                <h2 class="table-text-list">
                    Tender Evaluation Criteria Information
                </h2>
                <div class="tender-information-content">
                    <ul>
                        <li>
                            Have relevant experience on similar Field (Technical)
                        </li>
                        <li>
                            Required at least one purchase order of same item (Fish
                            Net),
                        </li>
                        <li>
                            If you do not submit the purchase order, you will be
                            treated as non-responsive.
                        </li>
                        <li>
                            Up to date copy of Tax Payment receipt / Equivalent
                            Document for international vendor
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tender-information mt-3">
                <h2 class="table-text-list">Contact Details</h2>
                <div class="tender-content-contact">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="tender-contact-item">
                                <h4>BRAC Center</h4>
                                <p>Address : 75 Mohakhali, Dhaka-1212, Bangladesh</p>
                                <p>Phone : 880-2-9881265</p>
                                <p>
                                    Email : <span>
                                        <a href="tel:" rel="noopener noreferrer">procurement@brac.net</a></span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="tender-contact-item">
                                <h4>Procurement Office Information</h4>
                                <p>Name : [00193318]-MD. NAJMUR SHAKIR</p>

                                <p>
                                    Email : <span>
                                        <a href="tel:" rel="noopener noreferrer"> najmur.shakir@brac.net</a></span>
                                </p>
                                <p>Phone : 880-2-9881265</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="tender-appy-btn custom-btn mt-3">
                    Apply Online
                </button>
            </div>
        </div>
    </div>
@endsection --}}
