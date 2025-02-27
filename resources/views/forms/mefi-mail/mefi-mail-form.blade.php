<x-forms.form action="{{ route('contact.store') }}">
    @honeypot

    <table>
        <tbody>
            <tr>
                <th scope="row">{{ trans('From') }}:</th>
                <td></td>
            </tr>
            <tr>
                <th scope="row">{{ trans('To') }}:</th>
                <td></td>
            </tr>
        </tbody>
    </table>

    <x-forms.input
        name="subject"
        label="{{ trans('Subject') }}"
        required="true" />

    <x-forms.textarea
        name="message"
        label="{{ trans('Message') }}"
        required="true"  />

    <x-forms.button>
        {{ trans('Send') }}
    </x-forms.button>

    <x-forms.button>
        {{ trans('Preview') }}
    </x-forms.button>
</x-forms.form>
