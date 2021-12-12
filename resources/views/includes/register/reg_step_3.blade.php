<section class="form-section">
    <h2 class="section__title">Сфера деятельности</h2>
    <span class="section__subtitle">Уже есть аккаунт? <a href="login">Войти</a></span>
    <div class="section__select">
        <select name="work_activity_tags[]" class="section__select" data-placeholder="Выберите макс. 5 тегов" multiple>
            @foreach($users as $user)
                <option value="{{ $user->name }}">{{ $user->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="section__select">
        <select name="skill_tags[]" class="section__select" data-placeholder="Выберите макс. 5 тегов" multiple>
            @foreach($tags as $tag)
                <option value="{{ $tag->name_tag }}">{{ $tag->name_tag }}</option>
            @endforeach
        </select>
    </div>
    <input type="text" class="section__input" placeholder="Страна проживания"/>
    <input type="text" class="section__input" placeholder="Дата рождения"/>
    <button class="section__button_submit next-2">Далее</button>
    <button class="section__button_prev prev-2">Назад</button>
</section>

