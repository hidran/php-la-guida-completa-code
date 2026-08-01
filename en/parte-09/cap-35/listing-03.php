["GET", "/login", [LoginController::class, "create"]],
["POST", "/login", [LoginController::class, "store"]],
["POST", "/logout", [LoginController::class, "destroy"]],
