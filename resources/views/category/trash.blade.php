@extends('layout.master')
@section('content')



        <div class="table-responsive pt-3">
          <table class="table table-info">
            <thead>
              <tr>
                <th>
                    #
                </th>
                <th>
                    Category_name
                </th>

                <th>
                   Action
                </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($categories as $key => $category)
                <tr data-expanded="true" class="item-{{ $category->id }}">
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $category->name }}</td>

                    <td>
                        <form action="{{ route('category.restoredelete', $category->id) }}" method="POST">
                            @csrf
                            @method('put')
                            <button type="submit" class="w3-button w3-blue">Khôi Phục</button>
                            <a data-href="{{ route('category_destroy', $category->id) }}"
                                id="{{ $category->id }}" class="w3-button w3-red sm deleteIcon">Xóa</a>

                        </form>
                    </td>
                    @endforeach


            </tbody>
        </table>
        {{-- <tr>{{ $categories->appends(request()->query()) }}</tr> --}}
        </div>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js'></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            $(document).on('click', '.deleteIcon', function(e) {
                e.preventDefault();
                let id = $(this).attr('id');
                let href = $(this).data('href');
                let csrf = '{{ csrf_token() }}';
                console.log(id);
                Swal.fire({
                    title: 'Bạn có chắc không?',
                    text: "Bạn sẽ không thể hoàn nguyên điều này!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Có, xóa!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: href,
                            method: 'delete',
                            data: {
                                _token: csrf
                            },
                            success: function(res) {
                                Swal.fire(
                                    'Deleted!',
                                    'Tệp của bạn đã bị xóa!',
                                    'success'
                                )
                                $('.item-' + id).remove();
                            },
                        });
                        Swal.fire({
                            icon: 'error',
                            title: 'lỗi rồi...',
                            text: 'Đã xảy ra lỗi!',
                        })
                    }
                })
            });
        </script>


  @endsection
