let languageNavigator = navigator.language || navigator.userLanguage;

const changeLanguage = language => {
    console.log(language)

    let pageText

    switch (language) {
        case "en-US": pageText = en_data
        case "en-GB": pageText = en_data
        case "en": pageText = en_data

        case "nl": pageText = nl_data
        case "nl-BE": pageText = nl_data

        case "fr": pageText = fr_data
        case "fr-BE": pageText = fr_data
        case "fr-fr": pageText = fr_data
    }

    // ----- Header -----
    document.getElementById("headerTitle").innerHTML = pageText.header.title
    document.getElementById("headerDescription").innerHTML = pageText.header.description
    document.getElementById("headerButtonRequestHelp").innerHTML = pageText.header.buttonRequestHelp
    document.getElementById("headerButtonProposeHelp").innerHTML = pageText.header.buttonProposeHelp
    // ----- Cards -----
    // --- senior ---
    document.getElementById("cardSeniorQuote").innerHTML = pageText.cards.senior.quote
    document.getElementById("cardSeniorTitle").innerHTML = pageText.cards.senior.title
    document.getElementById("cardsSeniorStepsStepOne").innerHTML = pageText.cards.senior.steps.stepOne
    document.getElementById("cardsSeniorStepsStepTwo").innerHTML = pageText.cards.senior.steps.stepTwo
    document.getElementById("cardsSeniorStepsStepThree").innerHTML = pageText.cards.senior.steps.stepThree
    document.getElementById("cardsSeniorButton").innerHTML = pageText.cards.senior.button
    // --- young ---
    document.getElementById("cardsYoungQuote").innerHTML = pageText.cards.young.quote
    document.getElementById("cardsYoungTitle").innerHTML = pageText.cards.young.title
    document.getElementById("cardsYoungSetpsStepOneTitle").innerHTML = pageText.cards.young.stepOneTitle
    document.getElementById("cardsYoungSetpsStepOneText").innerHTML = pageText.cards.young.stepOneText
    document.getElementById("cardsYoungSetpsStepTwoTitle").innerHTML = pageText.cards.young.stepTwoTitle
    document.getElementById("cardsYoungSetpsStepOneText").innerHTML = pageText.cards.young.stepTwoText
    document.getElementById("cardsYoungButton").innerHTML = pageText.cards.young.button

    // ----- team -----
    document.getElementById("teamTitle").innerHTML = pageText.team.title
    document.getElementById("teamDescription").innerHTML = pageText.team.description
}


changeLanguage(languageNavigator)