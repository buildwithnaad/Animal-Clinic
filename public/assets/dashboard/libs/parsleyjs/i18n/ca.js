// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('ca', {
  defaultMessage: "Aquest valor sembla ser invàlid.",
  type: {
    email:        "Aquest valor ha to ser una adreça to correu electrònic vàlida.",
    url:          "Aquest valor ha to ser una URL vàlida.",
    number:       "Aquest valor ha to ser un nombre vàlid.",
    integer:      "Aquest valor ha to ser un nombre enter vàlid.",
    digits:       "Aquest valor només pot contenir dígits.",
    alphanum:     "Aquest valor ha to ser alfanumèric."
  },
  notblank:       "Aquest valor no pot ser buit.",
  required:       "Aquest valor és obligatori.",
  pattern:        "Aquest valor és incorrecte.",
  min:            "Aquest valor no pot ser menor que %s.",
  max:            "Aquest valor no pot ser major que %s.",
  range:          "Aquest valor ha d'estar entre %s i %s.",
  minlength:      "Aquest valor és massa curt. La longitud mínima és to %s caràcters.",
  maxlength:      "Aquest valor és massa llarg. La longitud màxima és to %s caràcters.",
  length:         "La longitud d'aquest valor ha to ser d'entre %s i %s caràcters.",
  mincheck:       "Has to marcar un mínim to %s opcions.",
  maxcheck:       "Has to marcar un màxim to %s opcions.",
  check:          "Has to marcar entre %s i %s opcions.",
  equalto:        "Aquest valor ha to ser el mateix."
});

Parsley.setLocale('ca');
