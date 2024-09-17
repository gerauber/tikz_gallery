\usepackage{tikz}
\usepackage[compat=1.1.0]{tikz-feynman}
...

\begin{tikzpicture}
    \begin{feynman}
        \vertex (w);% {\(W\)};
        \vertex[right=1cm of w] (w2);
        \vertex[below=0.05cm of w2] (w3);
        \vertex[above right=0.5cm and 1cm of w2] (l) {\(d\)};
        \vertex[below right=0.5cm and 1cm of w2] (nul) {\(\bar{u}\)};

        \diagram* {
        (w) -- [boson, edge label=\(\ W^-\)] (w2),
        w2 -- [fermion] (l) ,
        %(w2) -- [scalar] (nul) ,
        (nul) -- [fermion] (w2),
        };
    \end{feynman}
\end{tikzpicture}
\begin{tikzpicture}
    \begin{feynman}
        \vertex (w);% {\(W\)};
        \vertex[right=1cm of w] (w2);
        \vertex[below=0.05cm of w2] (w3);
        \vertex[above right=0.5cm and 1cm of w2] (l) {\(s\)};
        \vertex[below right=0.5cm and 1cm of w2] (nul) {\(\bar{u}\)};

        \diagram* {
        (w) -- [boson, edge label=\(\ W^-\)] (w2),
        w2 -- [fermion] (l) ,
        %(w2) -- [scalar] (nul) ,
        (nul) -- [fermion] (w2),
        };
    \end{feynman}
\end{tikzpicture}

\begin{tikzpicture}
    \begin{feynman}
        \vertex (w);% {\(W\)};
        \vertex[right=1cm of w] (w2);
        \vertex[below=0.05cm of w2] (w3) {\(g_\mu\)};
        \vertex[above right=0.5cm and 1cm of w2] (l) {\(\mu^-\)};
        \vertex[below right=0.5cm and 1cm of w2] (nul) {\(\bar{\nu}_\mu\)};

        \diagram* {
        (w) -- [boson, edge label=\(\ W^-\)] (w2),
        w2 -- [fermion] (l) ,
        %(w2) -- [scalar] (nul) ,
        (nul) -- [fermion] (w2),
        };
    \end{feynman}
\end{tikzpicture}
\begin{tikzpicture}
    \begin{feynman}
        \vertex (w);% {\(W\)};
        \vertex[right=1cm of w] (w2);
        \vertex[below=0.05cm of w2] (w3) {\(g_\tau\)};
        \vertex[above right=0.5cm and 1cm of w2] (l) {\(\tau^-\)};
        \vertex[below right=0.5cm and 1cm of w2] (nul) {\(\bar{\nu}_\tau\)};

        \diagram* {
        (w) -- [boson, edge label=\(\ W^-\)] (w2),
        (w2) -- [fermion] (l),
        %(w2) -- [scalar] (nul) ,
        (nul) -- [fermion] (w2),
        };
    \end{feynman}
\end{tikzpicture}