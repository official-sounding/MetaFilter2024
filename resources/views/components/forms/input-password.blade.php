<div class="field input-with-icon" x-data="{ show: false }">
    <x-forms.label
        for="password"
        label="Password"
        :required="true"
    />

    <input :type="show ? 'text' : 'password'" name="password" id="password" type="password">

    <x-icons.icon-component filename="eye-fill" @click="show = !show" />
    <x-icons.icon-component filename="eye-slash-fill" @click="show = !show" />
</div>
