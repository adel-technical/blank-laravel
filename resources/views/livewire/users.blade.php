<div class="container">
    <x-content-header :titlePage="'
        ادارة المستخدمين
         '" />
    <x-image-loading />
    <section class="content">
        <div class="card">
            <div class="card-header">
                @can('create user')
                <a href="{{ route('users.create') }}" class="btn btn-primary">
                    أضافة مستخدم جديد
                </a>
                @endcan
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">
                                الاسم
                            </th>
                            <th scope="col">
                                البريد الالكتروني
                            </th>
                            <th scope="col">
                                الصلاحية
                            </th>
                            <th scope="col">
                                الإجراءات
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $key => $user)
                            <tr wire:key="{{ $user->id }}">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if (!empty($user->getRoleNames()))
                                        @foreach ($user->getRoleNames() as $v)
                                            <label class="badge badge-success">{{ $v }}</label>
                                        @endforeach
                                    @endif
                                </td>
                                <td>
                                    @can('edit user')
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info btn-sm">تعديل</a>
                                    @endcan

                                    @can('delete user')
                                    <x-button-delete :id="$user->id" route="users" />
                                    @endcan 
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        {{ $users->links() }}
                    </tfoot>
                </table>
            </div>
        </div>
    </section>
</div>
