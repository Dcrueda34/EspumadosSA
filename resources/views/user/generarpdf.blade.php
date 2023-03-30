                     <table >
                                    <tr>
                                        <th>No</th>
                                        
										<th>Name</th>
										<th>Cedula</th>
										<th>Email</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
											<td>{{ $user->name }}</td>
											<td>{{ $user->cedula }}</td>
											<td>{{ $user->email }}</td>
                                        </tr>
                                            
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
