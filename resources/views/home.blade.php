@extends('layout')
@section('title','Home')
@section('content')
  <h6>This is a Blog posting app. LOGIN or REGISTER from the top to get started</h6>
    <br><br><br>
    <style>
        #pat{
            background-color: #f0f0f0; /* Background color of the page */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50vh;
            margin: 0;
            color: darkred;
            background-color: darkgray;

            font-size: 24px; /* Adjust the font size as needed */
        }
    </style>
    <div class="pattern" id="pat">
        <pre>
* * *       *        * * *     * * *
*     *     *      *       *  *
* * *       *      *       *  *     * *
*     *     *      *       *  *       *
* * *       * * *    * * *     * * * *
        </pre>
    </div>
@endsection

