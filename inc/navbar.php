<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
    <div class="container">
        <a class="navbar-brand" href="<?php echo URLROOT . '/index.php'; ?>">Fitness-PHP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URLROOT . '/index.php'; ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URLROOT . '/fitness/workout/workouts.php'; ?>">Workouts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URLROOT . '/fitness/exercise/exercises.php'; ?>">Exercises</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URLROOT . '/fitness/workitem/workitems.php'; ?>">WorkItems</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo URLROOT . '/auth/register/register.php'; ?>">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo URLROOT . '/auth/login/login.php'; ?>">Login</a>
                    </li>
            </ul>
        </div>
    </div>
</nav>