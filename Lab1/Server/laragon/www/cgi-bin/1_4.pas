PROGRAM PrintName(INPUT, OUTPUT);
USES
  DOS;
BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  WRITELN('Hello,', GetEnv('REQUEST_METHOD'));
  WRITELN('Hello,', GetEnv('QUERY_STRING'));
  WRITELN('Hello,', GetEnv('CONTENT_LENGTH'));
  WRITELN('Hello,', GetEnv('HTTP_USER_AGENT'));
  WRITELN('Hello,', GetEnv('HTTP_HOST'))
END.

