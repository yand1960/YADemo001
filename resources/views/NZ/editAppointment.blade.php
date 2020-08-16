<script>
    async function confirm() {
        const url = `/nz/appointments/add/{{$appointment['id']}}/${document.getElementById("name-{{$appointment['id']}}").value || 0}`;
        const response = await fetch(url);
        // console.log(url)
        window.location.replace("/nz/appointments/{{$appointment['event_id']}}");
    }
</script>

<h1>Add appointment</h1>
<p>Appointment time</p>
<p>{{$appointment['date']}}</p>
<label>Name</label>
<input id="name-{{$appointment['id']}}" type="text">
<button onclick="confirm();" >Сonfirm</button> <br />
<a href="/nz/appointments/{{$appointment['event_id']}}">Back to appointments</a>
