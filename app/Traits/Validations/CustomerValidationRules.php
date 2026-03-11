<?php

namespace App\Traits\Validations;

trait CustomerValidationRules
{
    /**
     * Reglas para crear cliente
     */
    public function rulesForCreate()
    {
        return [
            'first_name' => 'required|string|max:50',
            'middle_name' => 'nullable|string|max:50',
            'last_name' => 'required|string|max:50',
            'second_last_name' => 'required|string|max:50',
            'email' => 'required|email|unique:customers,email',
            'phone' => 'required|string|min:7|max:10',
            'document_type_id' => 'required|integer',
            'document_number' => 'required|string|max:50|unique:customers,document_number',
            'address' => 'nullable|string|max:255',
            'city_id' => 'required|integer|exists:cities,id',
        ];
    }

    /**
     * Reglas para actualizar cliente
     */
    public function rulesForUpdate($customerId)
    {
        return [
            'first_name' => 'required|string|max:50',
            'middle_name' => 'nullable|string|max:50',
            'last_name' => 'required|string|max:50',
            'second_last_name' => 'required|string|max:50',
            'email' => 'required|email|unique:customers,email,' . $customerId,
            'phone' => 'required|string|min:7|max:10',
            'document_type_id' => 'required|integer',
            'document_number' => 'required|string|max:50|unique:customers,document_number,' . $customerId,
            'address' => 'nullable|string|max:255',
            'city_id' => 'required|integer|exists:cities,id',
        ];
    }

    public function messages()
    {
        return [
            // Reglas de requeridos
            'first_name.required' => 'El primer nombre es obligatorio.',
            'last_name.required' => 'El primer apellido es obligatorio.',
            'second_last_name.required' => 'El segundo apellido es obligatorio.',
            'document_number.required' => 'El número de documento es obligatorio.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'city_id.required' => 'Debe seleccionar una ciudad.',

            // Reglas de unicidad
            'document_number.unique' => 'Este número de documento ya está registrado.',
            'email.unique' => 'Este correo ya está registrado.',

            // Formatos
            'email.email' => 'Debe ingresar un correo electrónico válido.',
            'city_id.exists' => 'La ciudad seleccionada no es válida.',

            // Reglas de longitud
            'first_name.max' => 'El primer nombre no puede superar los 50 caracteres.',
            'middle_name.max' => 'El segundo nombre no puede superar los 50 caracteres.',
            'last_name.max' => 'El primer apellido no puede superar los 50 caracteres.',
            'second_last_name.max' => 'El segundo apellido no puede superar los 50 caracteres.',
            'document_number.max' => 'El número de documento no puede superar los 50 caracteres.',
            'address.max' => 'La dirección no puede superar los 255 caracteres.',

            // Reglas para teléfono
            'phone.required' => 'El teléfono es obligatorio.',
            'phone.min' => 'El teléfono debe tener al menos 7 dígitos.',
            'phone.max' => 'El teléfono no puede superar los 10 dígitos.',

            // Tipo de dato
            'document_type_id.required' => 'Debe seleccionar un tipo de documento.',
            'document_type_id.integer' => 'El tipo de documento no es válido.',
            'city_id.integer' => 'La ciudad no es válida.',
        ];
    }

}
