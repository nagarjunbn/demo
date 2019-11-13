<script type="text/javascript">
	var conn = new WebSocket('ws://laravel.local:9000');
conn.onopen = function(e) {
    console.log("Connection established!");
    conn.send('Hello World!');
};

conn.onmessage = function(e) {
    console.log(e.data);
};
</script>
