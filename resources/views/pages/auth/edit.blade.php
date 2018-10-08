<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page Title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
        <script src="main.js"></script> -->
    </head>
    <body>
        <form method="POST" action="{{ route('job.edit', ['id' => $table->id]) }}">
            {{ csrf_field() }}
            <table>
                <tr>
                    <td>
                        <label for="id">Enter your unique ID to edit</label>
                        <input id="id" type="text" name="id" />

                        <input type="submit" value="submit" />
                    </td>
                </tr>
            </table>
        </form>        
    </body>
</html>