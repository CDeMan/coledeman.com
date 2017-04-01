/**
 * Created by cole on 31/03/17.
 */
/**
 * Created by cole on 31/03/17.
 */
$(document).ready(function () {
    $('select').material_select();
    $('.collapsible').collapsible();

    $("#encrypt").prop("checked", true)

    $("#encrypt").on("click", function () {
        $('#textarea1label').text("Plaintext");
        $('#textarea2label').text("Cipher Text");
    });

    $("#decrypt").on("click", function () {
        $('#textarea1label').text("Cipher Text");
        $('#textarea2label').text("Plaintext");
    });

    $("#swap").on("click", function () {
        var tmp = $('#textarea1').val();
        $('#textarea1').val($('#result').text());
        $('#result').text(tmp);
    });


    $("#cipherselect").change(function () {
        var tmp = $("#cipherselect").val();
        if (tmp == 1) {
            $('#descriptionheader').text("Caesar Cipher Description");
            $('#description').text("Key: Any number 0 to 26.\n");
            $('#keylabel').text("Key: (Any number 0 to 26.)\n");
        }
        if (tmp == 2) {
            $('#descriptionheader').text("Vigenère Cipher Description");
            $('#description').text("Key: any word or combination of letters");
            $('#keylabel').text("Key: (Any combination of letters.)\n");
        }
        if (tmp == 3) {
            $('#descriptionheader').text("Matrix Transposition Cipher Description");
            $('#description').text("Key: Consecutive numbers starting at one in any order separated with spaces. \nExample: 1 4 2 3\n");
            $('#keylabel').text("Key: (Consecutive numbers starting at one in any order separated with spaces.)\n");
        }
    });

    $("#process").on("click", function () {
        var tmp = $("#cipherselect").val();
        var action = 0;
        var text, key;
        text = $("#textarea1").val();
        key = $("#key").val();
        if ($('#encrypt').is(':checked')) {
            action = 1;
        } else {
            action = 2;
        }
        //caesar
        if (1 == tmp) {
            if (action == 1) {
                $("#result").text(encryptCaesar(text, key));
            } else if (action == 2) {
                $("#result").text(decryptCaesar(text, key));
            }
        } else if (2 == tmp) {
            if (action == 1) {
                $("#result").text(encryptVigenere(text, key));
            } else if (action == 2) {
                $("#result").text(decryptVigenere(text, key));
            }
        } else if (3 == tmp) {
            if (action == 1) {
                $("#result").text(encryptMatrixTransposition(text, key));
            } else if (action == 2) {
                $("#result").text(decryptMatrixTransposition(text, key));
            }
        }
    });
});
/*
 var plain = "This is me testing the thing";
 var key = 17;

 var tmp = encryptCaesar(plain, key);

 console.log("Caesar");
 console.log(tmp);
 console.log(decryptCaesar(tmp, key)+"\n");

 var plain = "This is me testing the thing";
 var key = "secret";

 console.log("Vigenere");
 var tmp = encryptVigenere(plain, key);
 console.log(tmp);
 console.log(decryptVigenere(tmp, key)+"\n");

 var plain = "Testing test";
 var key = "1 4 2 3";
 console.log("Matrix Transposition");
 var tmp = encryptMatrixTransposition(plain, key);
 console.log(tmp);
 console.log(decryptMatrixTransposition(tmp, key)+"\n");*/

function encryptCaesar(plaintext, key) {
    plaintext = plaintext.toLowerCase();
    var result = "";
    var tmp;
    key = parseInt(key);

    for (var i = 0; i < plaintext.length; i++) {
        if (plaintext.charAt(i) != ' ') {
            tmp = (plaintext.charAt(i).charCodeAt(0) - 'a'.charCodeAt(0) + 1 + key) % 26;
            if (tmp <= 0) {
                tmp = 26 + tmp;
            }

            result += String.fromCharCode(tmp + 'a'.charCodeAt(0) - 1);
        } else {
            result += ' ';
        }
    }
    return result;
}

function decryptCaesar(ciphertext, key) {
    ciphertext = ciphertext.toLowerCase();
    var result = "";
    var tmp;

    for (var i = 0; i < ciphertext.length; i++) {
        if (ciphertext.charAt(i) != ' ') {
            tmp = (ciphertext.charAt(i).charCodeAt(0) - 'a'.charCodeAt(0) + 1 - key) % 26;
            if (tmp <= 0) {
                tmp = 26 + tmp;
            }

            result += String.fromCharCode(tmp + 'a'.charCodeAt(0) - 1);
        } else {
            result += ' ';
        }
    }
    return result;
}

function encryptVigenere(plaintext, key) {
    plaintext = plaintext.toLowerCase();
    var result = "";
    var tmp = "";
    var keyLength = key.length;

    var num;
    for (var i = 0; i < plaintext.length; i++) {
        if (plaintext.charAt(i) == ' ') {
            result += ' ';
        } else {
            num = ((plaintext.charAt(i).charCodeAt(0) - 'a'.charCodeAt(0)) + (key.charAt(i % keyLength).charCodeAt(0) - 'a'.charCodeAt(0))) % 26;
            if (num <= -1) {
                num = 26 + num;
            }
            result += String.fromCharCode(num + 'a'.charCodeAt(0));
        }
    }
    return result;
}

function decryptVigenere(ciphertext, key) {

    ciphertext = ciphertext.toLowerCase();
    var result = "", tmp = "", keyLength = key.length;
    var num;
    for (var i = 0; i < ciphertext.length; i++) {
        if (ciphertext.charAt(i) == ' ') {
            result += ' ';
        } else {
            num = ((ciphertext.charAt(i).charCodeAt(0) - 'a'.charCodeAt(0)) - (key.charAt(i % keyLength).charCodeAt(0) - 'a'.charCodeAt(0))) % 26;
            if (num <= -1) {
                num = 26 + num;
            }
            result += String.fromCharCode(num + 'a'.charCodeAt(0));
        }
    }
    return result;
}

function encryptMatrixTransposition(plaintext, key) {
    key = stringToMatrixKey(key);
    if (!checkValidMatrixTranspositionKey(key)) {
        return "Key is invalid.";
    }
    plaintext = plaintext.toLowerCase();
    var result = "";
    var tmp = plaintext.length / key.length;

    var x = key.length;
    var y = Math.ceil(tmp);

    var matrix = new Array(x);
    for (var i = 0; i < x; i++) {
        matrix[i] = new Array(y);
    }
    var count = 0;

    plaintext = plaintext.replace(/ /g, "%");

    for (var j = 0; j < y; j++) {
        for (var i = 0; i < x; i++) {
            if (count < plaintext.length) {
                matrix[i][j] = plaintext.charAt(count);
                count++;
            } else {
                matrix[i][j] = "%";
            }
        }
    }

    for (var i = 0; i < x; i++) {
        for (var j = 0; j < y; j++) {
            result += matrix[key[i] - 1][j];
        }
    }
    return result;
}

function decryptMatrixTransposition(plaintext, key) {
    key = stringToMatrixKey(key);
    if (!checkValidMatrixTranspositionKey(key)) {
        return "Key is invalid.";
    }
    plaintext = plaintext.toLowerCase();
    var result = "";
    var tmp = plaintext.length / key.length;

    var x = key.length;
    var y = Math.ceil(tmp);

    var matrix = new Array(x);
    for (var i = 0; i < x; i++) {
        matrix[i] = new Array(y);
    }
    var count = 0;

    plaintext = plaintext.replace(/%/g, " ");

    for (var i = 0; i < x; i++) {
        for (var j = 0; j < y; j++) {
            if (count < plaintext.length) {
                matrix[key[i] - 1][j] = plaintext.charAt(count);
                count++;
            }
        }
    }

    for (var j = 0; j < y; j++) {
        for (var i = 0; i < x; i++) {
            result += matrix[i][j];
        }
    }
    return result;
}

function stringToMatrixKey(key) {
    var tmp1, tmp2;
    tmp1 = key.split(" ");
    tmp2 = key.split(",");
    var result;
    if (tmp1.length > tmp2.length) {
        for (var i = 0; i < tmp1.length; i++) {
            tmp1[i] = parseInt(tmp1[i]);
        }
        result = tmp1;
    } else {
        for (var i = 0; i < tmp2.length; i++) {
            tmp2[i] = parseInt(tmp2[i]);
        }
        result = tmp2;
    }
    return result;
}

function checkValidMatrixTranspositionKey(key) {
    var valid = true;
    for (var i = 0; i < key.length && valid; i++) {
        valid = !isNaN(key[i]);
    }

    if (!valid) {
        console.log("Array contains String. Key invalid.")
        return false;
    }
    var tmp1, tmp2;
    tmp1 = 0;
    for (var i = 0; i < key.length; i++) {
        tmp1 += key[i];
    }
    tmp2 = (key.length * (key.length + 1)) / 2;
    if (tmp1 != tmp2) {
        console.log("Math says not consecutive. Invalid Key.");
        return false;
    }

    var i, j;
    i = 0;
    j = 1;
    var check = true;
    while (i < key.length && j <= key.length) {
        if (i == 0) {
            if (check == false) {
                console.log("False break.")
                break;
            }
            check = false;
        }
        if (key[i] == j) {
            i = 0;
            j++;
            check = true;
        }
        i++;
    }
    return check;
}