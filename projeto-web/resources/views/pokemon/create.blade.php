<form action="{{ url('pokemon') }}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="Name" required>
    <textarea name="tipo" placeholder="tipo" required></textarea>
    <input type="text" name="pontos_de_poder" placeholder="pdp" required>
    <button type="submit">Create pokemon</button>
</form>