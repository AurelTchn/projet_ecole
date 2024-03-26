<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EleveRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nom' => 'required',
            'prenom' => 'required',
            'profession' => 'required',
            'contact' => 'required|numeric',
            'email' => 'required|email',
            'statut' => 'required',
            'nom_eleve' => 'required',
            'prenom_eleve' => 'required',
            'date_de_naissance' => 'required',
            'sexe' => 'required',
            'classe' => 'required',
            'personne_a_contacter' => 'required',
            'adresse' => 'required',
            'apte' => 'required',

        ];
    }

    public function messages(){
        return [
            'nom.required' => 'Le nom du parent est nécéssaire',
            'prenom.required' => 'Le prenom du parent est nécéssaire',
            'profession.required' => 'La profession du parent est nécéssaire',
            'contact.required' => 'Le contact du parent est nécéssaire',
            'contact.numeric' => 'Le contact doit être que des chiffres',
            'email.required' => 'L\'email du parent est nécéssaire',
            'email.email' => 'L\'email entré n\'est pas valide',
            'nom_eleve.required' => 'Le nom de l\'élève est nécéssaire',
            'prenom_eleve.required' => 'Le prenom de l\'élève est nécéssaire',
            'date_de_naissance.required' => 'La date de naissance de l\'élève est nécéssaire',
            'personne_a_contacter.required' => 'Qui contactons-nous en cas d\'urgence',
            'adresse.required' => 'L\'adresse de l\'élève est nécéssaire',
            
        ];
    }
}
