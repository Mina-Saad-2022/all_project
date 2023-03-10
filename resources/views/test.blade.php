<div class="row">
    <div class="col-sm-12">
        <table id="example2"
               class="text-center table table-bordered table-hover dataTable dtr-inline"
               role="grid" aria-describedby="example2_info">
            <thead>
            <tr role="row">
                <th class="sorting sorting_asc" tabindex="0" aria-controls="example2"
                    rowspan="1" colspan="1" aria-sort="ascending"
                    aria-label="Rendering engine: activate to sort column descending">
                    ID
                </th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                    colspan="1" aria-label="Browser: activate to sort column ascending">
                    Name
                </th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                    colspan="1" aria-label="Platform(s): activate to sort column ascending">
                    Email
                </th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                    colspan="1"
                    aria-label="Engine version: activate to sort column ascending">
                    Phone
                </th>

                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                    colspan="1"
                    aria-label="Engine version: activate to sort column ascending">
                    Delete
                </th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                    colspan="1"
                    aria-label="Engine version: activate to sort column ascending">
                    Edit
                </th>
            </tr>
            </thead>
            <tbody>


            @foreach($user_data as $users)
            <tr class="odd">
                <td>{{$users->id}}</td>
                <td>{{$users->name}}</td>
                <td>{{$users->email}}</td>
                <td>{{$users->phone}}</td>
                <td>
                    <button class="btn btn-danger">
                        <i class="fa-solid fa-trash-can"></i>
                    </button>
                </td>
                <td>
                    <button class="btn btn-warning">
                        <i class="fa-solid fa-recycle"></i>
                    </button>
                </td>
            </tr>
            @endforeach


            </tbody>

        </table>
    </div>
</div>


