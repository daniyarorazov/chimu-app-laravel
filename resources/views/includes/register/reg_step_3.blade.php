<section class="form-section">
    <h2 class="section__title">Сфера деятельности</h2>
    <span class="section__subtitle">Уже есть аккаунт? <a href="login">Войти</a></span>
    <div class="section__select">
        <div class="section__block">
        <span class="section__icon">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 7C20.0002 6.89195 19.9829 6.78458 19.949 6.682L18.86 3.419C18.5291 2.42291 17.8927 1.55642 17.0413 0.942645C16.1898 0.328874 15.1666 -0.000961674 14.117 2.10612e-06H5.883C4.83339 -0.000961674 3.81016 0.328874 2.95871 0.942645C2.10726 1.55642 1.47088 2.42291 1.14 3.419L0.0510001 6.684C0.0172777 6.78595 6.05076e-05 6.89262 0 7C0.00530061 7.96437 0.360662 8.894 1 9.616V16C1 17.0609 1.42143 18.0783 2.17157 18.8284C2.92172 19.5786 3.93913 20 5 20H9.027V16C9.027 15.7348 9.13236 15.4804 9.31989 15.2929C9.50743 15.1054 9.76178 15 10.027 15C10.2922 15 10.5466 15.1054 10.7341 15.2929C10.9216 15.4804 11.027 15.7348 11.027 16V20H15C16.0609 20 17.0783 19.5786 17.8284 18.8284C18.5786 18.0783 19 17.0609 19 16V9.618C19.6398 8.89548 19.9952 7.96506 20 7ZM3.037 4.052C3.23599 3.45455 3.61795 2.93486 4.12874 2.56657C4.63954 2.19828 5.25328 2.00006 5.883 2H14.117C14.7467 2.00006 15.3605 2.19828 15.8713 2.56657C16.3821 2.93486 16.764 3.45455 16.963 4.052L18 7.146C17.9693 7.65124 17.7456 8.12537 17.3752 8.47041C17.0049 8.81545 16.5162 9.00504 16.01 9C15.5737 9.00212 15.1462 8.87746 14.7794 8.64117C14.4127 8.40488 14.1224 8.06714 13.944 7.669C13.8754 7.47341 13.7477 7.30396 13.5786 7.18411C13.4095 7.06426 13.2073 6.99993 13 7C12.7921 7.00092 12.5896 7.06661 12.4208 7.18795C12.252 7.30929 12.1252 7.48023 12.058 7.677C11.8788 8.07146 11.5898 8.40598 11.2256 8.64058C10.8613 8.87518 10.4373 8.99993 10.004 8.99993C9.57075 8.99993 9.14666 8.87518 8.78242 8.64058C8.41818 8.40598 8.12919 8.07146 7.95 7.677C7.8824 7.47894 7.75437 7.30708 7.58394 7.18563C7.41351 7.06417 7.20928 6.99925 7 7C6.79272 6.99993 6.59054 7.06426 6.42142 7.18411C6.25231 7.30396 6.12461 7.47341 6.056 7.669C5.87757 8.06714 5.58734 8.40488 5.22057 8.64117C4.8538 8.87746 4.42629 9.00212 3.99 9C3.48471 9.00375 2.99722 8.81359 2.62794 8.46868C2.25866 8.12376 2.0357 7.65037 2.005 7.146L3.037 4.052ZM15 18H13.027V16C13.027 15.2044 12.7109 14.4413 12.1483 13.8787C11.5857 13.3161 10.8226 13 10.027 13C9.23135 13 8.46829 13.3161 7.90568 13.8787C7.34307 14.4413 7.027 15.2044 7.027 16V18H5C4.46957 18 3.96086 17.7893 3.58579 17.4142C3.21071 17.0391 3 16.5304 3 16V10.86C3.32274 10.9484 3.6554 10.9955 3.99 11C5.11254 10.9928 6.18968 10.5559 7 9.779C7.80399 10.5619 8.88183 10.9999 10.004 10.9999C11.1262 10.9999 12.204 10.5619 13.008 9.779C13.8165 10.5537 14.8903 10.9905 16.01 11C16.3446 10.996 16.6774 10.949 17 10.86V16C17 16.5304 16.7893 17.0391 16.4142 17.4142C16.0391 17.7893 15.5304 18 15 18Z" fill="#E7E7E7"/>
            </svg>
        </span>
        <select name="work_activity_tags[]" class="section__select" data-placeholder="Выберите макс. 5 тегов" multiple>
            @foreach($skills_tag as $tag)
                <option value="{{ $tag->name_tag }}">{{ $tag->name_tag }}</option>
            @endforeach
        </select>
    </div>
    </div>

    <div class="section__select">
        <div class="section__block">
        <span class="section__icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20.537 10L14 3.46501C13.5371 2.99979 12.9867 2.63083 12.3805 2.37939C11.7743 2.12795 11.1243 1.99901 10.468 2.00001H6.00001C4.93914 2.00001 3.92173 2.42143 3.17158 3.17158C2.42144 3.92172 2.00001 4.93914 2.00001 6.00001V10.466C1.99866 11.1227 2.12753 11.7732 2.37916 12.3798C2.6308 12.9864 3.0002 13.5371 3.46601 14L10 20.535C10.9377 21.4727 12.2094 21.9994 13.5355 21.9994C14.8616 21.9994 16.1333 21.4727 17.071 20.535L20.537 17.069C21.4726 16.1306 21.998 14.8596 21.998 13.5345C21.998 12.2094 21.4726 10.9384 20.537 10ZM19.123 15.657L15.656 19.123C15.0846 19.6684 14.325 19.9727 13.535 19.9727C12.7451 19.9727 11.9855 19.6684 11.414 19.123L4.88001 12.588C4.60031 12.3101 4.37852 11.9794 4.22747 11.6151C4.07642 11.2509 3.99911 10.8603 4.00001 10.466V6.00001C4.00001 5.46957 4.21072 4.96086 4.5858 4.58579C4.96087 4.21072 5.46958 4.00001 6.00001 4.00001H10.467C11.2622 4.00236 12.0243 4.31821 12.588 4.87901L19.122 11.412C19.6836 11.9751 19.9991 12.738 19.9993 13.5333C19.9995 14.3286 19.6844 15.0916 19.123 15.655V15.657ZM9.00001 7.50001C9.00001 7.79668 8.91204 8.08669 8.74722 8.33336C8.58239 8.58003 8.34812 8.77229 8.07404 8.88583C7.79995 8.99936 7.49835 9.02906 7.20738 8.97118C6.9164 8.91331 6.64913 8.77044 6.43935 8.56067C6.22957 8.35089 6.08671 8.08361 6.02883 7.79264C5.97095 7.50167 6.00066 7.20007 6.11419 6.92598C6.22772 6.65189 6.41998 6.41762 6.66666 6.2528C6.91333 6.08798 7.20334 6.00001 7.50001 6.00001C7.89784 6.00001 8.27937 6.15804 8.56067 6.43935C8.84198 6.72065 9.00001 7.10218 9.00001 7.50001Z" fill="#E7E7E7"/>
            </svg>
        </span>
        <select name="skills_tags[]" class="section__select" data-placeholder="Выберите макс. 5 тегов" multiple>
            @foreach($field_activity_tags as $tag)
                <option value="{{ $tag->name_tag }}">{{ $tag->name_tag }}</option>
            @endforeach
        </select>
        </div>
    </div>

    <div class="section__block">
        <span class="section__icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.0001 6.0001C11.209 6.0001 10.4356 6.23469 9.77782 6.67422C9.12002 7.11374 8.60733 7.73846 8.30458 8.46936C8.00183 9.20027 7.92261 10.0045 8.07695 10.7805C8.2313 11.5564 8.61226 12.2691 9.17167 12.8285C9.73108 13.3879 10.4438 13.7689 11.2197 13.9232C11.9957 14.0776 12.7999 13.9984 13.5308 13.6956C14.2617 13.3929 14.8864 12.8802 15.326 12.2224C15.7655 11.5646 16.0001 10.7912 16.0001 10.0001C16.0001 8.93923 15.5787 7.92181 14.8285 7.17167C14.0784 6.42152 13.061 6.0001 12.0001 6.0001ZM12.0001 12.0001C11.6045 12.0001 11.2179 11.8828 10.889 11.663C10.5601 11.4433 10.3037 11.1309 10.1523 10.7655C10.001 10.4 9.96136 9.99788 10.0385 9.60992C10.1157 9.22195 10.3062 8.86559 10.5859 8.58588C10.8656 8.30618 11.222 8.1157 11.6099 8.03853C11.9979 7.96136 12.4 8.00096 12.7655 8.15234C13.1309 8.30371 13.4433 8.56006 13.663 8.88896C13.8828 9.21785 14.0001 9.60453 14.0001 10.0001C14.0001 10.5305 13.7894 11.0392 13.4143 11.4143C13.0392 11.7894 12.5305 12.0001 12.0001 12.0001ZM12.0001 2.0001C10.9429 1.97589 9.89177 2.16628 8.91023 2.55975C7.92868 2.95322 7.0371 3.5416 6.28935 4.28935C5.5416 5.0371 4.95322 5.92868 4.55975 6.91023C4.16628 7.89177 3.97589 8.9429 4.0001 10.0001C4.0001 16.3261 8.8121 20.2601 10.8811 21.6571C11.2096 21.8805 11.5978 22 11.9951 22C12.3924 22 12.7806 21.8805 13.1091 21.6571C15.1811 20.2601 20.0001 16.3241 20.0001 10.0001C20.0239 8.94301 19.8332 7.89208 19.4396 6.91072C19.046 5.92937 18.4576 5.03796 17.7099 4.2903C16.9622 3.54264 16.0708 2.95424 15.0895 2.56062C14.1081 2.167 13.0572 1.97632 12.0001 2.0001ZM12.0001 20.0001C10.2001 18.7811 6.0001 15.3671 6.0001 10.0001C5.97216 9.20464 6.10825 8.41195 6.39989 7.67135C6.69153 6.93076 7.13248 6.25812 7.6953 5.6953C8.25812 5.13248 8.93076 4.69153 9.67135 4.39989C10.4119 4.10825 11.2046 3.97216 12.0001 4.0001C12.7929 3.98234 13.5811 4.12539 14.317 4.42063C15.053 4.71587 15.7216 5.15718 16.2823 5.71791C16.843 6.27864 17.2843 6.94717 17.5796 7.68315C17.8748 8.41913 18.0179 9.2073 18.0001 10.0001C18.0001 15.3641 13.8001 18.7811 12.0001 20.0001Z" fill="#E7E7E7"/>
            </svg>
        </span>
    <input type="text" name="country" class="section__input" placeholder="Страна проживания"/>
    </div>

    <div class="section__block">
        <span class="section__icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17 3C17 2.73478 16.8946 2.48043 16.7071 2.29289C16.5196 2.10536 16.2652 2 16 2C15.7348 2 15.4804 2.10536 15.2929 2.29289C15.1054 2.48043 15 2.73478 15 3H9C9 2.73478 8.89464 2.48043 8.70711 2.29289C8.51957 2.10536 8.26522 2 8 2C7.73478 2 7.48043 2.10536 7.29289 2.29289C7.10536 2.48043 7 2.73478 7 3C5.67441 3.00159 4.40356 3.52888 3.46622 4.46622C2.52888 5.40356 2.00159 6.67441 2 8V17C2.00159 18.3256 2.52888 19.5964 3.46622 20.5338C4.40356 21.4711 5.67441 21.9984 7 22H17C18.3256 21.9984 19.5964 21.4711 20.5338 20.5338C21.4711 19.5964 21.9984 18.3256 22 17V8C21.9984 6.67441 21.4711 5.40356 20.5338 4.46622C19.5964 3.52888 18.3256 3.00159 17 3ZM7 5V6C7 6.26522 7.10536 6.51957 7.29289 6.70711C7.48043 6.89464 7.73478 7 8 7C8.26522 7 8.51957 6.89464 8.70711 6.70711C8.89464 6.51957 9 6.26522 9 6V5H15V6C15 6.26522 15.1054 6.51957 15.2929 6.70711C15.4804 6.89464 15.7348 7 16 7C16.2652 7 16.5196 6.89464 16.7071 6.70711C16.8946 6.51957 17 6.26522 17 6V5C17.7956 5 18.5587 5.31607 19.1213 5.87868C19.6839 6.44129 20 7.20435 20 8H4C4 7.20435 4.31607 6.44129 4.87868 5.87868C5.44129 5.31607 6.20435 5 7 5ZM17 20H7C6.20435 20 5.44129 19.6839 4.87868 19.1213C4.31607 18.5587 4 17.7956 4 17V10H20V17C20 17.7956 19.6839 18.5587 19.1213 19.1213C18.5587 19.6839 17.7956 20 17 20ZM17 13C17 13.1978 16.9414 13.3911 16.8315 13.5556C16.7216 13.72 16.5654 13.8482 16.3827 13.9239C16.2 13.9996 15.9989 14.0194 15.8049 13.9808C15.6109 13.9422 15.4327 13.847 15.2929 13.7071C15.153 13.5673 15.0578 13.3891 15.0192 13.1951C14.9806 13.0011 15.0004 12.8 15.0761 12.6173C15.1518 12.4346 15.28 12.2784 15.4444 12.1685C15.6089 12.0586 15.8022 12 16 12C16.2652 12 16.5196 12.1054 16.7071 12.2929C16.8946 12.4804 17 12.7348 17 13ZM13 13C13 13.1978 12.9414 13.3911 12.8315 13.5556C12.7216 13.72 12.5654 13.8482 12.3827 13.9239C12.2 13.9996 11.9989 14.0194 11.8049 13.9808C11.6109 13.9422 11.4327 13.847 11.2929 13.7071C11.153 13.5673 11.0578 13.3891 11.0192 13.1951C10.9806 13.0011 11.0004 12.8 11.0761 12.6173C11.1518 12.4346 11.28 12.2784 11.4444 12.1685C11.6089 12.0586 11.8022 12 12 12C12.2652 12 12.5196 12.1054 12.7071 12.2929C12.8946 12.4804 13 12.7348 13 13ZM9 13C9 13.1978 8.94135 13.3911 8.83147 13.5556C8.72159 13.72 8.56541 13.8482 8.38268 13.9239C8.19996 13.9996 7.99889 14.0194 7.80491 13.9808C7.61093 13.9422 7.43275 13.847 7.29289 13.7071C7.15304 13.5673 7.0578 13.3891 7.01921 13.1951C6.98063 13.0011 7.00043 12.8 7.07612 12.6173C7.15181 12.4346 7.27998 12.2784 7.44443 12.1685C7.60888 12.0586 7.80222 12 8 12C8.26522 12 8.51957 12.1054 8.70711 12.2929C8.89464 12.4804 9 12.7348 9 13ZM17 17C17 17.1978 16.9414 17.3911 16.8315 17.5556C16.7216 17.72 16.5654 17.8482 16.3827 17.9239C16.2 17.9996 15.9989 18.0194 15.8049 17.9808C15.6109 17.9422 15.4327 17.847 15.2929 17.7071C15.153 17.5673 15.0578 17.3891 15.0192 17.1951C14.9806 17.0011 15.0004 16.8 15.0761 16.6173C15.1518 16.4346 15.28 16.2784 15.4444 16.1685C15.6089 16.0586 15.8022 16 16 16C16.2652 16 16.5196 16.1054 16.7071 16.2929C16.8946 16.4804 17 16.7348 17 17ZM13 17C13 17.1978 12.9414 17.3911 12.8315 17.5556C12.7216 17.72 12.5654 17.8482 12.3827 17.9239C12.2 17.9996 11.9989 18.0194 11.8049 17.9808C11.6109 17.9422 11.4327 17.847 11.2929 17.7071C11.153 17.5673 11.0578 17.3891 11.0192 17.1951C10.9806 17.0011 11.0004 16.8 11.0761 16.6173C11.1518 16.4346 11.28 16.2784 11.4444 16.1685C11.6089 16.0586 11.8022 16 12 16C12.2652 16 12.5196 16.1054 12.7071 16.2929C12.8946 16.4804 13 16.7348 13 17ZM9 17C9 17.1978 8.94135 17.3911 8.83147 17.5556C8.72159 17.72 8.56541 17.8482 8.38268 17.9239C8.19996 17.9996 7.99889 18.0194 7.80491 17.9808C7.61093 17.9422 7.43275 17.847 7.29289 17.7071C7.15304 17.5673 7.0578 17.3891 7.01921 17.1951C6.98063 17.0011 7.00043 16.8 7.07612 16.6173C7.15181 16.4346 7.27998 16.2784 7.44443 16.1685C7.60888 16.0586 7.80222 16 8 16C8.26522 16 8.51957 16.1054 8.70711 16.2929C8.89464 16.4804 9 16.7348 9 17Z" fill="#E7E7E7"/>
            </svg>
        </span>
        <input type="date" max="{{date("Y-m-d")}}" name="birthdate" class="section__input" placeholder="Дата рождения"/>
    </div>
    <button class="section__button_submit next-2">Далее</button>
    <button class="section__button_prev prev-2">Назад</button>
</section>

