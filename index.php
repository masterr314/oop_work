<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>OOP Lab1</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <div>
            <h2>Collatz Conjecture</h2>
            <div>
                <form action="process.php" method="POST">
                    <label for="startNum" class="form-label">Start number: </label>
                    <input type="number" class="form-control" id="startNum" name="start">
                    <label for="lastNum" class="form-label">Last number: </label>
                    <input type="number" class="form-control" id="lastNum" name="last"/>
                    <br/>
                    <button type="submit" class="btn btn-primary">Calculate</button>
                </form>
            </div>
        </div>
        <br/><br/>
        <div>
            <h2>Arithmetic Progression</h2>
            <div>
                <form action="arithmetic_projection.php" method="POST">
                    <label for="first" class="form-label">First element: </label>
                    <input type="number" class="form-control" id="first" name="first">
                    <label for="delta" class="form-label">Delta: </label>
                    <input type="number" class="form-control" id="delta" name="delta"/>
                    <label for="amount" class="form-label">Amount: </label>
                    <input type="number" class="form-control" id="amount" name="amount"/>
                    <br/>
                    <button type="submit" class="btn btn-primary">Calculate</button>
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>