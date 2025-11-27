@extends('layouts.app')

@section('title-block')Страница связи@endsection

@section('content')
    <div class="feedback-form">
    <h2 class="feedback-form__title">Форма обратной связи</h2>
    
    <form action="{{ route('contact.submit') }}" method="POST" class="feedback-form__form">
        @csrf
        
        <!-- Поле: Имя -->
        <div class="form-group">
            <label for="name" class="form-group__label">Введите имя *</label>
            <input 
                type="text" 
                id="name" 
                name="name" 
                value="{{ old('name') }}"
                class="form-group__input @error('name') form-group__input--error @enderror"
                required
            >
            @error('name')
                <span class="form-group__error">{{ $message }}</span>
            @enderror
        </div>

        <!-- Поле: E-mail -->
        <div class="form-group">
            <label for="email" class="form-group__label">Введите e-mail *</label>
            <input 
                type="email" 
                id="email" 
                name="email" 
                value="{{ old('email') }}"
                class="form-group__input @error('email') form-group__input--error @enderror"
                required
            >
            @error('email')
                <span class="form-group__error">{{ $message }}</span>
            @enderror
        </div>

        <!-- Поле: Тема сообщения -->
        <div class="form-group">
            <label for="subject" class="form-group__label">Тема сообщения *</label>
            <input 
                type="text" 
                id="subject" 
                name="subject" 
                value="{{ old('subject') }}"
                class="form-group__input @error('subject') form-group__input--error @enderror"
                required
            >
            @error('subject')
                <span class="form-group__error">{{ $message }}</span>
            @enderror
        </div>

        <!-- Поле: Сообщение -->
        <div class="form-group">
            <label for="message" class="form-group__label">Сообщение *</label>
            <textarea 
                id="message" 
                name="message" 
                rows="6"
                class="form-group__textarea @error('message') form-group__textarea--error @enderror"
                required
            >{{ old('message') }}</textarea>
            @error('message')
                <span class="form-group__error">{{ $message }}</span>
            @enderror
        </div>

        <!-- Кнопка отправки -->
        <button type="submit" class="feedback-form__submit">
            Отправить сообщение
        </button>
    </form>
    </div>
@endsection