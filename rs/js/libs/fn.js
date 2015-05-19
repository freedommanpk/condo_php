function log() {
//    window.console.log(new Error().stack);
    window.console.log.apply(window.console, arguments);
    return arguments[0];
}