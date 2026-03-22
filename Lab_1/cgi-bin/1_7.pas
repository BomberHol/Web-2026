PROGRAM WorkWithQueryString(INPUT, OUTPUT);
USES
  DOS;
  
FUNCTION GetQueryStringParameter(Key: STRING): STRING;
VAR
  QueryString, Name: STRING;
  PosName, Index: INTEGER;
BEGIN
  QueryString := GetEnv('QUERY_STRING');
  PosName := Pos(Key, QueryString);
  IF PosName = 0
  THEN
    GetQueryStringParameter := 'Hello Anonymous!'
  ELSE
    BEGIN
      Name := '';
      Index := PosName + Length(Key);
      WHILE (QueryString[Index] <> '&') AND (Index <> Length(QueryString))
      DO                                                                  
        BEGIN
          Index := Index + 1;
          IF QueryString[Index] <> '&'
          THEN 
            Name := Name + QueryString[Index]
        END; 
      GetQueryStringParameter := Name
    END
END;  
  
BEGIN {WorkWithQueryString}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  WRITELN('First Name: ', GetQueryStringParameter('first_name'));
  WRITELN('Last Name: ', GetQueryStringParameter('last_name'));
  WRITELN('Age: ', GetQueryStringParameter('age'))
END. {WorkWithQueryString}

