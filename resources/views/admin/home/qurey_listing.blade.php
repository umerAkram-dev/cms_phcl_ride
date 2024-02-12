@extends('admin.layouts.app')
@section('css_after')
    <style>
        .border_right {
            border-right: 2px solid #dee2e6;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
@endsection
@section('content')
    <main id="main" class="main">
        <section class="section">
            <div class="row">

                <h2>User Queries</h2>

                <table>
                    <tr>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Subject</th>
                        <th>Contact Us Textarea</th>
                    </tr>
                    @foreach ($queries as $query)
                        <tr>
                            <td>{{ $query->username }}</td>
                            <td>{{ $query->email }}</td>
                            <td>{{ $query->phone }}</td>
                            <td>{{ $query->subject }}</td>
                            <td>{{ $query->contact_us_textarea }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </section>
    </main>
@endsection
