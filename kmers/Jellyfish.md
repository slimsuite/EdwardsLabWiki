

### Jellyfish

For this prac, we have used a program called [Jellyfish](http://www.genome.umd.edu/jellyfish.html). Jellyfish finds all of the kmers in a set of sequences for a given `k`. These are output into a big file from which it is possible to extract counts for individual kmers or to generate a "kmer distribution". The data in `/share/data/babsgenome/jellyfish/` are examples of this latter output. These "histogram" files contain the number of different kmers found at each frequency, e.g. the number of different kmers found once, twice, three times etc. (See the [Jellyfish user guide](http://www.genome.umd.edu/docs/JellyfishUserGuide.pdf) for more details.)

**NOTE:** When plotting these data, we use `plot()` rather than `hist()` evenn though it is "histogram data". This is because Jellyfish has already transformed the raw data into counts. `hist()` is used when you need to performing the "binning" of data itself. (See R help for details.)

**Our Jellyfish files.** We ran `jellyfish count` with the `-C` option for a variety of trimmed input snake fastq files. These can be broadly split into three runs:

1. `*..mer_counts.histo` = Early runs with `k=21` on minimally trimmed (adaptors and Q10 quality trimming) data for the Mother, Father and Child snake. Output is by lane `L001`/`L002` or combined (no L given).

2. `TS_Mother_S1.truGQ25.k*.histo` = The trimmed Mother snake data used for assembly were run with a variety of `k` settings.

3. `TS_Mother_S1.truGQ*.k25.histo` = Mother snake data with a few different Quality trimming settings were run with `k=25`.

### Basic genome size calculation

Now visit the [online tutorial](http://koke.asrc.kanazawa-u.ac.jp/HOWTO/kmer-genomesize.html) and see if you can work through the process on one of the `*.histo` files from the server. (Pick any one.) Rather than run from the commandline as in the tutorial (**Plot graph with R** onwards), put your R code inside your R Markdown document and add some discussion of the results in Markdown. Think about whether you should use different R variable names.

**Challenge:** Rename your data frame fields to be more useful. Add better axis labels to your plots. (**HINT:** `colnames()`, `xlab=` & `ylab=`)


**QUESTION:** Do you get the same answer for a single lane of sequencing versus using both lanes?

**QUESTION:** Do you expect the three snake samples to give the same answer? Do they?

## GenomeScope

Now load the same data into the GenomeScope server that we looked at in the tutorial. Does it give the same answer?

**Challenge:** Try running several different `*.histo` files through the simple method and GenomeScope, then create a scatterplot of GenomeScope predictions versus the simple predictions. 

**Challenge:** See if you can use a `for(...){ ... }` loop in R to process several `*.histo` files in one go.

**Challenge:** Plot how predictions for both methods change on the `TS_Mother` data with (a) different `k` settings, and (b) different quality trimming thresholds.

If you are new to R, you might want to come back to these challenges after doing the assembly statistic tasks.

