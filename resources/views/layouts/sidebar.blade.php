<div class="list-group">
    <a href="{{ url('/transactions/create') }}" class="active list-group-item"><i class="material-icons">add_box</i> New Transaction</a>
    <a href="{{ url('/transactions') }}" class="list-group-item"><i class="material-icons">view_list</i> All Transactions</a>
    <a href="{{ url('/my-profile', Auth::user()->id) }}" class="list-group-item"><i class="material-icons">account_box</i> My Profile</a>
    <a href="#" class="list-group-item">#</a>
</div>
{{--<a href="{{ url('/my-profile',Auth::user()->id) }}"></a>--}}