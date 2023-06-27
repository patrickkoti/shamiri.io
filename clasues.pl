% axioms
clause([\+p(X) v \+q(Y), q(2)]).
clause([\+r(X,Y) v p(Y), \+q(Y)]).
clause([r(1,3)]).
clause([r(2,3)]).
clause([\+r(1,1)]).

% goal
prove([q(3)], clause, []).
