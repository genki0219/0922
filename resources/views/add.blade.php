@extends('layouts.default')
<style>
    th {
      background-color: #289ADC;
      color: white;
      padding: 5px 40px;
    }
    tr:nth-child(4) td{
      padding: 10px;
    }
    td {
      padding: 25px 40px;
      background-color: #EEEEEE;
      text-align: center;
    }
    input {
      padding: 5px;
    }
    button {
      padding: 10px 20px;
      background-color: #289ADC;
      border: none;
      color: white;
    }
</style>
@section('title', 'add.blade.php')

@section('content')
<form action="/add" method="POST">
  <table>
    @csrf
    <tr>
      <th>
        name
      </th>
      <td>
        <input type="text" name="name">
      </td>
    </tr>
    <tr>
      <th>
        age
      </th>
      <td>
        <input type="text" name="age">
      </td>
    </tr>
    <tr>
      <th>
        nationality
      </th>
      <td>
        <input type="text" name="nationality">
      </td>
    </tr>
    <tr>
      <th></th>
      <td>
        <button>送信</button>
      </td>
    </tr>
  </table>
</form>
@endsection