var conn = new WebSocket('ws://localhost:' + wsPort),
    btn = $('#send'),
    inp = $('#message'),
    list = $('#chat')
conn.onopen = function (e) {
    console.log("Connection established!");
};

conn.onmessage = function (e) {
    list.val(list.val() + '\n' + e.data);
};

btn.on('click', function () {
    conn.send(inp.val());
    return;
});


