@extends('layouts.admin')
@section('title')
    Edit User
@endsection
@section('content')
    <div class="py-3">
        <h6 class="m-0 font-weight-bold text-primary">Updating User</h6>
    </div>
    <hr>
    <div class="container emp-profile mt-3">
        <form action="{{ route('admin.users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
        <div class="row">
            <div class="col-sm-4">
                <img width="100%" src="{{$user->photo?asset('storage/'.$user->photo->photo_path):'https://via.placeholder.com/150'}}" alt="profile_image"/>
                <div class="form-group mt-4">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Phone number"
                           value="{{$user->email}}" disabled>
                </div>
                <button class="btn btn-primary mt-2" type="submit">Update</button>
            </div>
            <div class="col-sm-8">
                <div class="form-group font-weight-bold">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Name"
                           value="{{$user->name}}">
                </div>

                <div class="form-group font-weight-bold">
                    <label for="phone">Phone Number</label>
                    <input type="number" class="form-control" name="phone" placeholder="Enter Phone number"
                           value="{{$user->phone}}">
                </div>


                <div class="form-group font-weight-bold">
                    <label for="image">Upload Profile Pic </label>
                    <input type="file" class="form-control-file" name="image">
                </div>

                <div class="form-group font-weight-bold">
                    <label for="district">District</label>
                    <input type="text" class="form-control" name="district" placeholder="Enter Phone number"
                           value="{{$user->district}}">
                </div>
                <div class="form-group">
                            <label for="postal" class="col-form-label">Postal Address:</label>
                            <textarea type="text" rows="4" cols="200" class="form-control" name="postal" >{{$user->postal}}</textarea>
                        </div>
                <div class="form-group font-weight-bold">
                    <label for="state">State</label>
                    <select id="state" type="text" class="form-control " name="state" placeholder="Select State" >
                        <option value="{{$user->state}}"selected>{{$user->state}}</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                        <option value="Daman and Diu">Daman and Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Lakshadweep">Lakshadweep</option>
                        <option value="Puducherry">Puducherry</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Odisha">Odisha</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option value="West Bengal">West Bengal</option>
                    </select>

                </div>

                <div class="form-group font-weight-bold">
                    <label for="role">Role</label>
                    <select id="role" type="text" class="form-control" name="role" placeholder="Assign Role" >
                        @if($user->role === 'admin')
                            <option value="{{$user->role}}" selected>{{$user->role}}</option>
                            <option value="user">user</option>
                        @else
                            <option value="{{$user->role}}" selected>{{$user->role}}</option>
                            <option value="admin">admin</option>
                        @endif
                    </select>
                </div>
                
                   <div class="form-group font-weight-bold">
                        <label for="designation">Designation</label>
                        <select id="designation" type="text" class="form-control" name="designation">
                            @if($user->designation)
                                <option value="{{$user->designation}}" selected>{{$user->designation}}</option>
                            @else
                                <option value="" selected>SELECT</option>
                            @endif
                            <option value="management">management</option>
                            <option value="management(Guwahati)">management(Guwahati)</option>
                            <option value="content_management">content_management</option>
                            <option value="faculty">faculty</option>
                            <option value="councillor">councillor</option>
                            <option value="assistant">assistant</option>
                            <option value="editor">editor</option>
                        </select>
                    </div>

            </div>
        </div>

        </form>
    </div>

@endsection
